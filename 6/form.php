<html>
    <header>
    <title></title>
    <title></title>
    </header>
        <body>
            <?php
            if(isset($_GET['masukan'])){
                echo $_GET['masukan'];
            }
            
            ?>
            <form action="" method="GET">
                <input type="text" name="masukan">
                <button type="submit" name="proses_data">
                    SUBMIT
                </button>
            </form>
        </body>
</html>