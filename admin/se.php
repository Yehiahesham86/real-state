<form 
<div class="col-lg-12 m-b30">
					<div class="widget-box">
					<div class= " row wc-title ">
					<div class="col-lg-3 " ><h4>Student Profile</h4></div>

					<div class="col-lg-8 " > <input type="text"  class="form-control" value="" placeholder="search" name="txtname"  id="txtname">  </div>
					<div class="col-lg-1 " > <button class="btn btn-dark"  onclick="showUser($_GET['txtname'])" > search </button>  </div>
					</div>
					</div>
				</div>






                <script>
function showUser(str) {
 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("finaly").innerHTML = this.responseText;
      };
    
    xmlhttp.open("GET","search-profile.php?q="+str,true);
    xmlhttp.send();
  }
}
</script>