;(function ($) {
	$.PicSlider = function(context, options) {
		var self = this;
		self.context = context; // 缓存element,让原型链上的方法都可以访问

		self.container = null;

		self.slides = null;

		self.current = 0; // 当前显示的图片下标

		self.next = 1; // 下一张将显示的图片下标

		self.length = 0; // 图片数 

		self.dotWrap = null;

		self.dotes = null;

		self.classes = {

			container: 'picSlider-wrap',

			dotWrap: 'picDot-wrap'


		}

		self.defaults = {

			delay: 4000, // 图片显示时间 毫秒

			speed: 2000, // 图片动画时间 毫秒

			event: 'mouseover',

			animate: 'slide',

			selectors: {

				container: 'ul:first',

				slides: 'li',

				dotWrap: 'ol:first',

				dotes: 'li'
			}

		};

		self.options = $.extend({}, self.defaults, options);  //默认属性和自定义熟悉合并处理

		self.startid = null;

		self.isstart = false;

		self.init = function(options) {

			// 初始化控件
			self.container = self.context.find(self.options.selectors.container);
			self.slides = self.container.find(self.options.selectors.slides);
			self.length = self.slides.length;

			// 样式初始化
			self.setup();

			// 用户事件监听
			self.on();

			self.loadOptions(options);
			// 启动自动轮播
			return self.start(self.current);
		}

		self.setup = function() {
			
			// 样式初始化
			var position = self.context.css('position');

			// 
			if(position === 'static') {
				self.context.css('position', 'relative');
			}

			self.context.css('overflow', 'hidden');
			self.container.addClass(self.classes.container)

			// 隐藏所有图片，默认只显示第一张图
			self.slides.hide();
			self.slides.eq(self.current).show();

			// 初始化导航圆点
			self.dotWrap = document.createElement('ol');
			self.container.after(self.dotWrap);
			self.dotWrap = self.context.find(self.options.selectors.dotWrap);
			self.dotWrap.addClass(self.classes.dotWrap);
			for (var i = 0; i < self.length; i++) {
				self.dotWrap.append('<li></li>');
			}
			self.dotes = self.dotWrap.find(self.options.selectors.dotes);
			self.dotes.eq(0).addClass('on');
		};

		self.on = function() {

			// 鼠标触发事件监听 点击／悬停圆点
			self.dotes.on(self.options.event, function(e) {

				// 轮播停止事件
				self.stop();
				self.next = $(this).index();
				self.animate[self.options.animate](self.current,self.next);
				return self;
			});
		};

		self.loadOptions = function(options) {

			// 属性合法性判断
			if(!(options.speed > 200)||!(options.delay > options.speed)) {
				options.delay = self.defaults.delay;
				options.speed = self.defaults.speed;
			}

			if(options.event !== 'mouseover') options.event = 'click';
			if(options.animate !== 'fade') options.animate = 'slide';
		}

		self.start = function() {

			// 启动自动轮播
			self.isstart = true;
			self.startid = setInterval(function(){
				self.animate[self.options.animate](self.current,self.next);
			}, self.options.delay);
		};


		// 图片动画效果
		self.animate = {
			// 淡入淡出动画
			fade: function(current,next) {

				if(current != next) {
					// 如果点击另一张图片圆点
					self.dotes.removeClass('on');
					self.slides.eq(current).fadeOut(self.options.speed, function() {
					});
					self.dotes.eq(next).addClass('on');
					self.slides.eq(next).fadeIn(self.options.speed, function() {

						//改变下标
						self.changeIndex();
					}

					);
				}else {

					//重复点击同一圆点，只改变下标
					self.changeIndex();
				}

			},

			// 滑动动画
			slide: function(current,next) {

				if(current != next) {
					// console.log('from:'+self.current+',to:'+self.next);
					if(current < next){
						self.slides.eq(next).css('left', '1000px').show();
						self.dotes.removeClass('on');
						self.slides.eq(current).animate({left:'-1000px'},self.options.speed, function() {
							$(this).hide();
						});
						self.dotes.eq(next).addClass('on');
						self.slides.eq(next).animate({left:'0px'},self.options.speed, function() {

							//改变下标
							self.changeIndex();
						}

						);
					}else{
						self.slides.eq(next).css('left', '-1000px').show();
						self.dotes.removeClass('on');
						self.slides.eq(current).animate({left:'2000px'},self.options.speed, function() {
							$(this).hide();
						});
						self.dotes.eq(next).addClass('on');
						self.slides.eq(next).animate({left:'0px'},self.options.speed, function() {

							//改变下标
							self.changeIndex();
						}

						);
					}
				}else {

					//重复点击同一圆点，只改变下标
					self.changeIndex();
				}

			}
		}
		self.stop = function() {

			// 轮播停止事件
			self.slides.stop(true, true); // 停止正在进行的图片动画
			clearInterval(self.startid);
			self.isstart = false;
			return self;
		}

		self.changeIndex = function() {

			// 判断是否处于自动轮播状态
			if(self.isstart){

				// 自动轮播下一张时
				(self.current<self.length-1)? ++self.current: self.current = 0;//当前图片下标自增
				(self.next<self.length-1)? ++self.next: self.next = 0;

			}else{

				// 用户鼠标点击时
				self.current = self.next;// 当前图片下标赋值

				(self.next<self.length-1)? ++self.next: self.next = 0;

				// 重启自动轮播
				return self.start();
			}
		}
		return self.init(self.options);
	};

	$.fn.picSlider = function (options) {
		return this.each(function () {
			var $this = $(this);

			// 将实例化后的插件暂存，避免重复渲染
			if (!$.data(this, 'picSlider')) {
				$.data(this, 'picSlider', new $.PicSlider($this, options));
			}

		});
	};

})(jQuery);