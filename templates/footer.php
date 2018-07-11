<?php
/**
 * Footer Template File
 *
 * @author: John Dave Lagdameo
 * @since: 20180712
 *
 */
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script>
    $(function(){
        $('#position').keypress(function (e) {
            if (e.which == 13) {
                $('#form').submit();
                return false;    //<---- Add this line
            }
        });
        var loc = window.location.pathname;
        var dir = loc.split("/");
        var cur_path = dir[dir.length - 1];
        if(cur_path == "search_history.php"){
            $(".search-history").addClass("active");
        }else{
            $(".job-search").addClass("active");
        }
    });
</script>
</body>
</html>