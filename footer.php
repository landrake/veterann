<footer class="footer">
	
</footer>

<script>
	//Create tanggal dan waktu
    var display = function() {
        var Today = new Date();
        var hours = Today.getHours();
        var min   = Today.getMinutes();
        var sec   = Today.getSeconds();
        var Time  = hours;
        // var Time    = ((hours > 12) ? hours - 12 :(hours == 0) ? 12 :hours);
        Time += ((min < 10) ? ":0" : ":") + min;
        Time += ((sec < 10) ? ":0" : ":") + sec;
        Time += (hours >= 12) ? " PM" : " AM";
        document.getElementById('jam').innerHTML = Time;
    }
    setInterval(display,1000);

    display();

    $(function(){
        $('#tgl_lhr').datepicker({
             format: 'dd-mm-yyyy'
        });
        $('#tgl_pen').datepicker({
             format: 'dd-mm-yyyy'
        });
    });
</script>
</body>

</html>
