<div class="header-section">
    <div class="move-button">
        <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
    </div>
    <div class="top-logo">
        <h1><a href="index.html">Live Info</a></h1>
    </div>
    <div class="top-search">
        <form>
            <input type="text" placeholder="Search" required="">
        </form>
    </div>
    <div class="language-grid">
<!--                        <select class="form-control bfh-countries" data-country="US">
            <option value="">Select Language</option>
            <option>Spanish</option>
            <option>French</option>
            <option>German</option>
            <option>Italian</option>
            <option>Chinese</option>
            <option>Tagalog</option>
            <option>Polish</option>
            <option>Korean</option>
            <option>Vietnamese</option>
            <option>Portuguese</option>
            <option>Japanese</option>
            <option>Greek</option>
            <option>Arabic</option>
            <option>Hindi (urdu)</option>
            <option>Russian</option>
            <option>Yiddish</option>
            <option>Thai (laotian)</option>
            <option>Persian</option>
            <option>French Creole</option>
            <option>Armenian</option>
            <option>Navaho</option>
            <option>Hungarian</option>
            <option>Hebrew</option>
            <option>Dutch</option>
            <option>Mon-khmer (cambodian)</option>
            <option>Gujarati</option>
            <option>Ukrainian</option>
            <option>Czech</option>
            <option>Pennsylvania Dutch</option>
            <option>Miao (hmong)</option>
            <option>Norwegian</option>
            <option>Slovak</option>
            <option>Swedish</option>
            <option>Serbocroatian</option>
            <option>Kru</option>
            <option>Rumanian</option>
            <option>Lithuanian</option>
            <option>Finnish</option>
            <option>Panjabi</option>
            <option>Formosan</option>
            <option>Croatian</option>
            <option>Turkish</option>
            <option>Ilocano</option>
            <option>Bengali</option>
            <option>Danish</option>
            <option>Syriac</option>
            <option>Samoan</option>
            <option>Malayalam</option>
            <option>Cajun</option>
            <option>Amharic</option>
        </select>-->
    </div>
    <div class="clock-bottom">
        <div class="clock">
            <div id="Date"></div>
            <ul>
                <li id="hours"> </li>
                <li id="point">:</li>
                <li id="min"> </li>
                <li id="point">:</li>
                <li id="sec"> </li>
            </ul>
        </div>
    </div>
    <div class="dropdown-grids">
        <div id="loginContainer"><a href="#"  data-toggle="modal" data-target="#myModal"><span>Login</span></a></div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- clock-bottom -->

<script type="text/javascript">
    $(document).ready(function () {
        // Create two variable with the names of the months and days in an array
        var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"]

        // Create a newDate() object
        var newDate = new Date();
        // Extract the current date from Date object
        newDate.setDate(newDate.getDate());
        // Output the day, date, month and year    
        $('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

        setInterval(function () {
            // Create a newDate() object and extract the seconds of the current time on the visitor's
            var seconds = new Date().getSeconds();
            // Add a leading zero to seconds value
            $("#sec").html((seconds < 10 ? "0" : "") + seconds);
        }, 1000);

        setInterval(function () {
            // Create a newDate() object and extract the minutes of the current time on the visitor's
            var minutes = new Date().getMinutes();
            // Add a leading zero to the minutes value
            $("#min").html((minutes < 10 ? "0" : "") + minutes);
        }, 1000);

        setInterval(function () {
            // Create a newDate() object and extract the hours of the current time on the visitor's
            var hours = new Date().getHours();
            // Add a leading zero to the hours value
            $("#hours").html((hours < 10 ? "0" : "") + hours);
        }, 1000);

    });
</script>

<!-- clock-bottom -->