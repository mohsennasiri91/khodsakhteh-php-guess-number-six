<?php include_once './includes/head.php' ?>

<body>
    <div class="game-container transparent-9">
        <h2>
            🎯 داستان بازی حدس عدد
        </h2>
        <p class="text-justify">
            وقتی دکمه «شروع بازی» رو می‌زنی،
            من توی ذهنم یه عدد مخفی بین ۶ رقمی انتخاب می‌کنم و دیگه عوضش نمی‌کنم.
            حالا تو ۱۰ بار فرصت داری حدس بزنی اون عدد چیه.
            هر بار که یه عدد وارد می‌کنی، من بهت می‌گم کدوم رقمهایی که حدس زدی درست بوده.
            اگه قبل از تموم شدن ۱۰ تا شانس عدد رو پیدا کنی، برنده‌ای؛
            وگرنه بازی تموم می‌شه و می‌تونی دوباره از اول شروع کنی. 🎉
        </p>
        <form action="./start-game.php" method="post">
            <input type="hidden" name="game" value="start">
            <button>شروع بازی</button>
        </form>
        <?php include './includes/floats.php' ?>
    </div>
</body>

</html>