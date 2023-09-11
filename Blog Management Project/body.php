<body>
    <?php
    include_once('header.php');
    ?>
    <section class="content-body">
        <form action="content.php" method="post" enctype="multipart/form-data">
            <div class="content" id="content"></div>
            <input type="submit" id="btn-submit" class="btn-submit" value="Save">
            <script src="controller.js"></script>
        </form>
    </section>

</body>