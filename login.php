<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/eskills_logo_only.svg" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Belanosima&family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <title>Sign In</title>
  </head>
  <body>

    <?php include 'header.html'; ?>

    <main>
      <div id="main-container" class="always-centered">
        <aside>
          <h1>Sign In</h1>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error
            atque ea a ad deserunt veniam neque perspiciatis. Rem fugiat
            distinctio ipsum earum, eaque totam sint modi, itaque asperiores
            saepe repellendus?
          </p>
          <br />
          <form>
            <fieldset>
                <label>Username</label>
                <br>
                <input type="text" name="password" placeholder="Enter name">
                <br>
                <br>
                <label>Password</label>
                <br>
                    <input type="password" name="password" placeholder="Enter password">
                <br>
                <br>
                <label>User type</label>
                <br>
                <input type="radio" name="usertype" value="trainingprovider">Training Provider
                <input type="radio" name="usertype" value="instructor">Instructor
                <input type="radio" name="usertype" value="student">Student
                <br>
                <br>
                <form method="post" action="process.php">
                    <input type="submit" id="submit" class="bb">
                </form>
            </fieldset>
        </form>
        </aside>
        <section class="main-content">
          <h1>This is the main content.</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis cum
            nesciunt quia voluptatibus reiciendis cupiditate laborum maxime vero
            distinctio dolor blanditiis, facere temporibus libero, expedita non
            et sequi nemo eum? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Blanditiis eos eum voluptas rerum commodi vitae
            minima consectetur ipsa debitis tenetur dignissimos, dolore ex
            facilis provident! Odio itaque sint veniam exercitationem?
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis cum
            nesciunt quia voluptatibus reiciendis cupiditate laborum maxime vero
            distinctio dolor blanditiis, facere temporibus libero, expedita non
            et sequi nemo eum? Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Blanditiis eos eum voluptas rerum commodi vitae
            minima consectetur ipsa debitis tenetur dignissimos, dolore ex
            facilis provident! Odio itaque sint veniam exercitationem?
          </p>
        </section>
      </div>
    </main>

    <?php include 'footer.html'; ?>

  </body>
</html>
