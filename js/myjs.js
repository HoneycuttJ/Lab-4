function mylogin() {
	document.getElementById("loginForm").style.display = "block";
	document.getElementById("signupForm").style.display = "none";
}

function mysignup() {
   document.getElementById("loginForm").style.display = "none";
   document.getElementById("signupForm").style.display = "block";
}
	
		function popupfunction(x) {
            document.getElementById("popup" + x).style.display = "block";
			document.getElementById("fade2").style.display = "block";
        }

        function popupclose(x) {
            document.getElementById("popup" + x).style.display = "none";
			document.getElementById("fade2").style.display = "none";

        }
		
	
		function showcart() {
            x = document.getElementById("popup6");
			if (x.style.display === "none"){
				x.style.display = "block"
			}
			else {
				x.style.display = "none"
			}
		}

    function addcart(n) {
        document.getElementById("cart").innerHTML += n;
		var newItem = document.getElementById("cart").innerHTML;
        var outputElement = document.getElementById("item");
        outputElement.innerHTML += newItem + " <br><br>";
        document.getElementById("cart").innerHTML = "";
    }

