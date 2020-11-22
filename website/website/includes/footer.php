 
<footer>
        <ul>
            <li>&copy; <?php $startDate = 2019; $currentDate = date('Y'); 
                if($startDate == $currentDate) {
                    echo $currentDate;
                } else {
                    echo ''.$startDate.' - '.$currentDate.'';
                } // else
                
                ?></li>
            <li>All Rights Reserved</li>
            <li><a href="https://www.linkedin.com/in/lcared/">Web Design by Sharon</a></li>
            <li><a href="http://validator.w3.org/check/referer">HTML</a></li>
            <li><a href="http://jigsaw.w3.org/css-validator/check?uri=referer">CSS</a></li>
        </ul>
    
    </footer>
    </div> <!--end wrapper-->
</body>
</html>