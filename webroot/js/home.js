function checkTime(i) 
  	{
    	if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    	return i;
  	}

  	function startTime() 
  	{
	    var today=new Date();
	    var h=today.getHours();
	    var m=today.getMinutes();
	    var s=today.getSeconds();
	    m = checkTime(m);
	    s = checkTime(s);
		if( h == 12 )
		{
		    document.getElementById('txt').innerHTML = "12"+":"+m+":"+s+" PM";
		    var t = setTimeout(function(){startTime()},500);
		}
			else if( h == 13 )
			{
			    document.getElementById('txt').innerHTML = "01"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 14 )
			{
			    document.getElementById('txt').innerHTML = "02"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 15 )
			{
			    document.getElementById('txt').innerHTML = "03"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 16 )
			{
			    document.getElementById('txt').innerHTML = "04"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 17 )
			{
			    document.getElementById('txt').innerHTML = "05"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 18 )
			{
			    document.getElementById('txt').innerHTML = "06"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 19 )
			{
			    document.getElementById('txt').innerHTML = "07"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 20 )
			{
			    document.getElementById('txt').innerHTML = "08"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 21 )
			{
			    document.getElementById('txt').innerHTML = "09"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 22 )
			{
			    document.getElementById('txt').innerHTML = "10"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 23 )
			{
			    document.getElementById('txt').innerHTML = "11"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 24 )
			{
			    document.getElementById('txt').innerHTML = "12"+":"+m+":"+s+" PM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else if( h == 0 )
			{
			    document.getElementById('txt').innerHTML = "12"+":"+m+":"+s+" AM";
			    var t = setTimeout(function(){startTime()},500);
			}
			else
			{
				document.getElementById('txt').innerHTML = h+":"+m+":"+s+" AM";
			    var t = setTimeout(function(){startTime()},500);
			}
	
	}