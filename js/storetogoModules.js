$(document).ready(function() {
	var quotesInterval;
	
	if($(".sortimo-component.quotes-component").length > 0) {
		$(".quote-item .indexer .index:not(.current)").click(function() {
			clearInterval(quotesInterval);
			quotesInterval = setInterval(quoteAutoSlide, 7000);
			var currentIndex = $(this).find(".current-index").val();
			var nextIndex = $(this).find(".select-index").val();
			
			var moduleContainer = $(this).parent().parent().parent().parent().parent();
			var currentQuote = $(moduleContainer).find(".quote-" + currentIndex);
			var nextQuote = $(moduleContainer).find(".quote-" + nextIndex);
			
			$(currentQuote).addClass("hidden");
			$(nextQuote).removeClass("hidden");
		});
	}
	
	quotesInterval = setInterval(quoteAutoSlide, 7000);
});

function quoteAutoSlide() {
	if($(".sortimo-component.quotes-component").length > 0 && window.innerWidth >= 1024) {
		for(var i = 0; i < $(".sortimo-component.quotes-component").length; i++) {
			var currentQuoteComp = $(".sortimo-component.quotes-component")[i];
			var index = 0;
			
			if($(currentQuoteComp).find(".quote-item").length > 1)
			{
				var quotes = $(currentQuoteComp).find(".quote-item");
				
				for(var k = 0; k < $(quotes).length; k++)
				{
					if($(quotes[k]).is(":visible")) {
						var currentIndex = $(quotes[k]).find(".indexer .current .current-index").val();
						var nextIndex = parseInt(currentIndex) + 1;
						
						var currentQuote = $(currentQuoteComp).find(".quote-" + currentIndex);
						var nextQuote = $(currentQuoteComp).find(".quote-" + nextIndex);
						
						if(nextQuote == undefined || nextQuote.length == 0) {
							nextIndex = 0;
							nextQuote = $(currentQuoteComp).find(".quote-" + nextIndex);
						}
						
						
						$(currentQuote).addClass("hidden");
						$(nextQuote).removeClass("hidden");
						
						break;
					}
				}
			}
		}
	}
}

$(document).ready(function() {
	resizeAllCarouselHeights();
});

$(window).resize(function() {
	resizeAllCarouselHeights();
});

function resizeAllCarouselHeights() {
	var items = $(".sortimo-component.carousel-component");
	
	for(var i = 0; i < items.length; i++) {
		resizeCarouselHeights(items[i]);
	}
}

function resizeCarouselHeights(carousel) {
	var id = $(carousel).find(".component-id").val();
	var items = $("." + id + " .carousel-item");
	var maxHeight = 0;	
	
	for(var i = 0; i < items.length; i++) {
		var currentHeight = $(items[i]).height();
		
		if(currentHeight > maxHeight) {
			maxHeight = currentHeight;
		}
	}
	
	var imageHeight = parseInt($('.' + id + ' .carousel-item .image').height());
	var textHeight = maxHeight - imageHeight;
	
	$('.' + id + ' .carousel-item .text').css('height',textHeight + 'px' );
}

function showFAQCategory(id, element) {
	if($("#" + id).length > 0) {
		$(".category-container").hide();
		$("#" + id).show();
		
		$(".faq-category-link").removeClass("active");
		$(element).addClass("active");
		
		//to hide all
		showAnswerForQuestion();
	}
}

function showAnswerForQuestion(element) {
	$(".faq-answer").slideUp();
	$(".faq-question").removeClass("active");
	
	if(element != null) {
		var target= $(element).parent().find(".faq-answer");
		
		if($(target).is(":visible")) {
			$(element).removeClass("active");
			$(element).parent().find(".faq-answer").slideUp();
		} else {
			$(element).addClass("active");
			$(element).parent().find(".faq-answer").slideDown();
		}
	}
}

$(document).ready(function() {
	var components = $(".sortimo-component.faq-component");
	
	for(var i = 0; i < components.length; i++) {
		calculateFAQQuestionsHeight(components[i]);
	}
});

function calculateFAQQuestionsHeight(component) {
	var questions = $(component).find(".faq-question");
	
	var maxHeight = 0;
	
	for(var i = 0; i < questions.length; i++) {
		var currentHeight = $(questions[i]).outerHeight();
		if(currentHeight > maxHeight) {
			maxHeight = currentHeight;
		}	
	}
	
	if(maxHeight > 0) {
		$(questions).css("height", maxHeight);
	}
}

$(".close-tooltip").click(function() {
	closeTooltipItem();
});

function closeTooltipItem() {
	$(".tooltip-overlay").css("display", "none");
}

$(".tooltip-overlay").click(function(e) {
	if($(e.target).attr("class") == "tooltip-overlay") {
		closeTooltipItem();
	}
});

$(window).scroll(function() {
	closeTooltipItem();
});

$(window).resize(function() {
	recalculateTooltipCoordinatesForAllElements();
});

$(document).ready(function() {
	recalculateTooltipCoordinatesForAllElements();
});

$(document).ready(function() {
	if(window.innerWidth < 1024) {
		recalculateAllTooltipCoordinatesForZoom();
	} else {
		$(".sortimo-component.tooltip-component .image-container").css("height", "auto");
	}
});

$(window).resize(function() {
	if(window.innerWidth < 1024) {
		recalculateAllTooltipCoordinatesForZoom();
	} else {
		$(".sortimo-component.tooltip-component .image-container").css("height", "auto");
		$(".sortimo-component.tooltip-component .image-container").css("background-size", "cover");
	}
});

function recalculateAllTooltipCoordinatesForZoom() {
	var tooltipElements = $(".sortimo-component.tooltip-component");
	
	for(var i = 0; i < tooltipElements.length; i++) {
		recalculateTooltipCoordinatesForZoom(tooltipElements[i]);
	}
}



function recalculateTooltipCoordinatesForZoom(element) {
	//var scale = 1.3; //change here if scale is different to 130%
	
	var scale = $(element).find(".responsiveImageScale").val();
	
	if (scale > 1) {
		var percentageScale = (scale * 100) + "%";
		$(element).find(".image-container").css("background-size", percentageScale);
		
		//first set height of container to scale of image so only width is cut off 
		var currentHeight = $(element).find(".image-container img").height();
		$(element).find(".image-container").height(currentHeight * scale);
		
		var currentWidth = $(element).find(".image-container").width();
		var halfWidth = currentWidth / 2;
		
		var items = $(element).find(".tooltip-item");
		
		for(var i = 0; i < items.length; i++) {
			//calculate offset left and top for tooltip items
			var curLeft = parseInt($(items[i]).css("left"));
			var curTop = parseInt($(items[i]).css("top"));
			
			var newLeft = halfWidth - ((halfWidth - curLeft) * scale);
			var newTop = curTop * scale;
		    
			$(items[i]).css("left", newLeft);
			$(items[i]).css("top", newTop);
			
			
		}
	}
}

function recalculateTooltipCoordinatesForAllElements() {
	var tooltipElements = $(".sortimo-component.tooltip-component");
	
	for(var i = 0; i < tooltipElements.length; i++) {
		recalculateTooltipCoordinates(tooltipElements[i]);
	}
}

function recalculateTooltipCoordinates(element) {
	var orginalSize = $(element).find(".image-container .orginalImageWidth").val();
	var currentSize = $(element).find(".image-container")[0].offsetWidth;
	
	var x = currentSize / orginalSize;
	var items = $(element).find(".tooltip-item");
	for(var i = 0; i < items.length; i++) {
		var top = $(items[i]).find(".orginalItemTop").val();
		var left = $(items[i]).find(".orginalItemLeft").val();
		
		top = top * x;
		left = left * x;
		
		$(items[i]).css("top", top);
		$(items[i]).css("left", left);
	
	}
}

function showTooltipItem(id) {
	if(window.innerWidth > 640) {
		$(".tooltip-overlay").css("display", "none");
		$("#" + id).css("display", "flex");
	} else {
		$("#" + id).parent().parent().find(".header-tab.active").removeClass("active");
		$("#" + id).parent().parent().find(".content-tab.active").removeClass("active");
		
		var headerId = id + "_header_tab";
		var contentId = id + "_content_tab";
		
		$("#" + headerId).addClass("active");
		$("#" + contentId).addClass("active");
	}
}

function switchTooltipTab(element) {
	$(element).parent().find(".header-tab.active").removeClass("active");
	$(element).parent().parent().find(".content-tab.active").removeClass("active");
	
	$(element).addClass("active");
	
	var id = $(element).attr("id");
	
	var contentId = id.substring(0, id.length - 11);
	contentId = contentId + "_content_tab";
	
	$("#" + contentId).addClass("active");
}

$(document).ready(function() {
	var components = $(".sortimo-component.slots-component");
	
	if(components.length > 0) {
		for(var i = 0; i < components.length; i++) {
			var items = $(components[i]).find(".slot-item .text-container");
			var maxHeight = 0;
			
			for(var k = 0; k < items.length; k++) {
				var currentHeight = $(items[k]).innerHeight();
				if(currentHeight > maxHeight) {
					maxHeight = currentHeight;
				}
			}
			
			if(maxHeight > 0) {
				$(items).css("height", maxHeight + "px");
			}
		}
	}
});


/*** Video Component ***/

function playSortimoVideo(componentId) {
	var component = $("#" + componentId);
	
	if(component != null && component != undefined)
	{
		$(component).find(".video-thumbnail").hide();
		$(component).find(".video-overlay").hide();
		$(component).find(".video-frame-wrapper").show();
		document.getElementById(componentId + "_frame").contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*');
	}
}

/*** Stage Component ***/

$(document).ready(function() {
	if($(".sortimo-component.stage-component").length > 0) {
		var sliderInterval;
		
		$(".sortimo-component.stage-component").appendTo("body");
		$(".js-mainHeader").addClass("stage-header");
		$(".branding-mobile").addClass("stage-branding");
		$(".sortimo_Slider").addClass("stage-slider");
		
		$(".js-mainHeader, .branding-mobile").on("mouseenter", function() {
			$(".branding-mobile").css("background-color", "white");
			$(".js-mainHeader").css("background-color", "white");
		});
		
		$(".js-mainHeader, .branding-mobile").on("mouseleave", function() {
			$(".branding-mobile").css("background-color", "rgba(255,255,255,0.5)");
			$(".js-mainHeader").css("background-color", "rgba(255,255,255,0.5)");
		});
		
		$(".stage-slider .stage-indexer .index:not(.current)").click(function() {
			var currentIndex = $(this).find(".current-index").val();
			var nextIndex = $(this).find(".select-index").val();
			
			var moduleContainer = $(this).parent().parent().parent().parent();
			var currentStage = $(moduleContainer).find(".stage-index-" + currentIndex);
			var nextStage = $(moduleContainer).find(".stage-index-" + nextIndex);
			
			$(currentStage).fadeOut(600, function(){
		        $(nextStage).fadeIn(600);
		    });
			
			/*$(currentStage).fadeOut(200);
			setTimeout(function() {
				$(nextStage).fadeIn(200);
			}, 200);*/
			
			clearInterval(sliderInterval);
			
			sliderInterval = setInterval(function() {
				stageAutoSlide();
			}, 9000); // slider speed
			
			
			/*$(currentStage).css("opacity", "0");
			$(currentStage).one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function() {
			    $(currentStage).css("display", "none");
			});

			$(nextStage).css("display", "block");
			$(nextStage).css("opacity", "1");
			/*$(nextStage).one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function() {
			    $(nextStage).css("display", "block");
			});*/
		});
		
		if($(".sortimo-component.stage-component .stage-item .text-container .stage-btn").length > 1) {
			var items = $(".sortimo-component.stage-component .stage-item");
			
			if(items.length > 0) {
				for(var i = 0; i < $(items).length; i++) {
					
					var currentStage = $(".sortimo-component.stage-component .stage-item")[i];
					var buttons = $(currentStage).find(".text-container .stage-btn .btn");
					
					if(buttons.length > 0) {
						var maxWidth = 0;
						
						for(var k = 0; k < buttons.length; k++) {
							//var currentWidth = $(buttons[i]).outerWidth();
							var currentWidth = realWidth($(buttons[k]));
							if(currentWidth > maxWidth) {
								maxWidth = currentWidth;
							}
						}
						
						if(maxWidth > 0) {
							$(buttons).css("width", maxWidth);
						}
					}
				}
			}
		}
			
		
		sliderInterval = setInterval(function() {
			stageAutoSlide();
		}, 9000); // slider speed
	}
	
	stageParallax($(".sortimo-component.stage-component .image-container"), 0.65);
	stageOpacity();
	calcParallax($(".sortimo-component.stage-component .image-container"), 0.65);
	
	$(".sortimo-component.stage-component").on("mouseenter", function() {
		if(!$(".sortimo_Slider").hasClass("stage-slider")) {
			$(".sortimo_Slider").addClass("stage-slider");
		}
	});
	
	$(".sortimo-component.stage-component").on("mouseleave", function() {
		if($(".sortimo_Slider").hasClass("stage-slider")) {
			$(".sortimo_Slider").removeClass("stage-slider");
		}
	});
	
	// Make sortimo-content visible again!
	var content = $(".sortimo-content");
	
	if(content != null){
		content.css("opacity","1");
	}
});


// for calculating width of hidden buttons
function realWidth($obj){
    var $clone = $obj.clone();
    $clone.css("visibility","hidden");
    $clone.css("width","auto");
    $("body").append($clone);
    var width = $clone.outerWidth();
    $clone.remove();
    
    return width;
}
realWidth($("#parent").find("table:first"));



//slide automatic
function stageAutoSlide() {
	if($(".stage-slider .stage-indexer").length > 0) {
		var moduleContainer = $(".sortimo-component.stage-component.multiple-stage-component")[0];
		
		var currentIndex = $(moduleContainer).find(".stage-slider:visible").find(".index.current").find(".current-index").val();
		var nextIndex = parseInt(currentIndex) + 1;

		var currentStage = $(moduleContainer).find(".stage-index-" + currentIndex);
		var nextStage = $(moduleContainer).find(".stage-index-" + nextIndex);
		
		if($(nextStage).length == 0) {
			// begin from start
			nextIndex = 0;
			nextStage = $(moduleContainer).find(".stage-index-" + nextIndex);
		}
		
		$(currentStage).fadeOut(600, function(){
	        $(nextStage).fadeIn(600);
	    });
	}				
}

function stageParallax($object, multiplier){ 
	if(typeof multiplier == 'undefined') {
		multiplier = 0.5;
	}
	
	$(window).scroll(function(){
		calcParallax($object, multiplier);
		// calc opacity
		stageOpacity();
	});
}

function calcParallax($object, multiplier) {
	multiplier = 1 - multiplier;
	var top = $(document).scrollTop();
	var bg_css = 'center -' +(multiplier * top) + 'px';
	$object.css({"background-position" : bg_css});
}

function stageOpacity() {
	//component height is viewport height
	var height = document.documentElement.clientHeight;
	var scrollTop = $(document).scrollTop();
	var opacity = 1 - (scrollTop / height);
	$(".sortimo-component.stage-component").css("opacity", opacity);
}

$(document).ready(function() {
	if($(".sortimo-component.tile-component").length > 0) {
		$(".sortimo-component.tile-component .single-tile").sortimoTiles({hoverDelay: 0, hoverElem: "> div"});
	}
});