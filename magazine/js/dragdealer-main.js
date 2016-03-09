window.onload = function()
{

	
	// Slideshow
	
	var menuWrapper = document.getElementById('slideshow-menu-wrapper');
	var cursor = document.getElementById('slideshow-menu-cursor');
	
	var slideshow = new Dragdealer('slideshow',
	{
		steps: 32,
		loose: true,
		animationCallback: function(x, y)
		{
			var top = x * (menuWrapper.offsetHeight - cursor.offsetHeight);
			cursor.style.top = String(top) + 'px';
		}
	});
	
	document.getElementById('slideshow-photo-1').onclick = function()
	{
		slideshow.setStep(1);
		return false;
	}
	document.getElementById('slideshow-photo-2').onclick = function()
	{
		slideshow.setStep(2);
		return false;
	}
	document.getElementById('slideshow-photo-3').onclick = function()
	{
		slideshow.setStep(3);
		return false;
	}
	document.getElementById('slideshow-photo-4').onclick = function()
	{
		slideshow.setStep(4);
		return false;
	}
	document.getElementById('slideshow-photo-5').onclick = function()
	{
		slideshow.setStep(5);
		return false;
	}
	document.getElementById('slideshow-photo-6').onclick = function()
	{
		slideshow.setStep(6);
		return false;
	}
	
	document.getElementById('slideshow-photo-7').onclick = function()
	{
		slideshow.setStep(7);
		return false;
	}
	
	document.getElementById('slideshow-photo-8').onclick = function()
	{
		slideshow.setStep(8);
		return false;
	}
	
	document.getElementById('slideshow-photo-9').onclick = function()
	{
		slideshow.setStep(9);
		return false;
	}
	
	document.getElementById('slideshow-photo-10').onclick = function()
	{
		slideshow.setStep(10);
		return false;
	}
	
	document.getElementById('slideshow-photo-11').onclick = function()
	{
		slideshow.setStep(11);
		return false;
	}
	
	document.getElementById('slideshow-photo-12').onclick = function()
	{
		slideshow.setStep(12);
		return false;
	}
	
	document.getElementById('slideshow-photo-13').onclick = function()
	{
		slideshow.setStep(13);
		return false;
	}
	
	document.getElementById('slideshow-photo-14').onclick = function()
	{
		slideshow.setStep(14);
		return false;
	}
	
	document.getElementById('slideshow-photo-15').onclick = function()
	{
		slideshow.setStep(15);
		return false;
	}
	
	document.getElementById('slideshow-photo-16').onclick = function()
	{
		slideshow.setStep(16);
		return false;
	}
	document.getElementById('slideshow-photo-17').onclick = function()
	{
		slideshow.setStep(17);
		return false;
	}
	
	document.getElementById('slideshow-photo-18').onclick = function()
	{
		slideshow.setStep(18);
		return false;
	}
	
	document.getElementById('slideshow-photo-19').onclick = function()
	{
		slideshow.setStep(19);
		return false;
	}
	
	document.getElementById('slideshow-photo-20').onclick = function()
	{
		slideshow.setStep(20);
		return false;
	}
	
	document.getElementById('slideshow-photo-21').onclick = function()
	{
		slideshow.setStep(21);
		return false;
	}
	
	document.getElementById('slideshow-photo-22').onclick = function()
	{
		slideshow.setStep(22);
		return false;
	}
	
	document.getElementById('slideshow-photo-23').onclick = function()
	{
		slideshow.setStep(23);
		return false;
	}
	
	document.getElementById('slideshow-photo-24').onclick = function()
	{
		slideshow.setStep(24);
		return false;
	}
	
	document.getElementById('slideshow-photo-25').onclick = function()
	{
		slideshow.setStep(25);
		return false;
	}
	
	document.getElementById('slideshow-photo-26').onclick = function()
	{
		slideshow.setStep(26);
		return false;
	}
	
	document.getElementById('slideshow-photo-27').onclick = function()
	{
		slideshow.setStep(27);
		return false;
	}
	
	document.getElementById('slideshow-photo-28').onclick = function()
	{
		slideshow.setStep(28);
		return false;
	}
	
	document.getElementById('slideshow-photo-29').onclick = function()
	{
		slideshow.setStep(29);
		return false;
	}
	
	document.getElementById('slideshow-photo-30').onclick = function()
	{
		slideshow.setStep(30);
		return false;
	}
	
	document.getElementById('slideshow-photo-31').onclick = function()
	{
		slideshow.setStep(31);
		return false;
	}
	
	document.getElementById('slideshow-photo-32').onclick = function()
	{
		slideshow.setStep(32);
		return false;
	}
	}