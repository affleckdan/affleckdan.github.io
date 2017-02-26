<div id="mySideDiv" class="side_div">
        <a href="javascript:void(0)" class="closebtn" onclick="closeDiv()">&times;</a>
    </div>
    
    <span class="info_icon" onclick="openDiv()">
        <img src="img/info_icon.png" width="25px" title="More info">
    </span>
    
    <script>/* Set the width of the side div to open */
        function openDiv() {
            document.getElementById("mySideDiv").style.width = "750px";
        }

    /* Set the width of the side div to 0 to close */
        function closeDiv() {
            document.getElementById("mySideDiv").style.width = "0";
        }
    </script>