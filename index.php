<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Поздравительная открытка</title>
    <style>
      body {
        max-width: 90%;
        background: NavajoWhite;
      }
      .congratulation {
        margin: 0, auto;
        background: rgba(255, 255, 255, 0.6);
      }
      .image {
        border-radius: 25%;
      }
      .balloon-container {
       position: absolute;
       top: 0;
       left: 0;
       overflow: hidden;
      }
      .counter-container {
        background: rgba(255, 255, 255, 0.7);
        position: fixed;
        top: 15px;
        left: 15px;
        border: 2px solid darkred;
        padding: 1px;
      }
      .bold {
        font-weight: bold;
        
      }
    </style>
  </head>
  <body>
    <div class="conainer">
      <div class="row justify-content-center mt-5">
        <div class="col-12 text-center">
          <img class="image w-15 bg-white border" src="https://cs6.pikabu.ru/avatars/2021/x2021422-2104746540.png" alt="">
        </div>
        <div class="col-8 border congratulation mt-3 p-3 text-justify">
          <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, ab ut id rerum aspernatur provident quo in dolorum natus exercitationem quibusdam suscipit similique asperiores neque deserunt? Ullam dignissimos dolor ipsum.</span>
          <span>Iusto, possimus, esse officiis beatae impedit nobis enim expedita fugiat vero inventore. Maxime, nesciunt, inventore, ut itaque blanditiis impedit dicta assumenda nobis earum vitae facilis alias animi. Quis, odio, veniam!</span>
          <span>Veritatis quisquam numquam culpa nam aspernatur. Tempora, tempore, numquam, iusto unde molestiae provident ad dolorum ut harum praesentium excepturi recusandae optio voluptatum corporis laborum vitae accusantium ea ducimus delectus repellendus.</span></p>
        </div>
      </div>
      
    </div>
    <div class="balloon-container">
    </div>
    <div class="counter-container p-3">
      <p><span>Вы лопнули шариков: </span><span class="bold counter">0</span></p>
      <p><span>Пропущено шариков: </span><span class="bold loseCounter">0</span></p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>