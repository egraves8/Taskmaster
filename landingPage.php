<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <header>

    </header>
    <body>
        <header id="showcase">
            <center id="title">NJIT TASKMASTER 2.0</center>
            <div>
                <div class="background">
                    <div class="shape"></div>
                    <div class="shape"></div>
                </div>
                <form action="./registration_login/register.php" method="post">
                    <h3>Signup Here</h3>

                    <label for="fname">First Name</label>
                    <input type="text" placeholder="Billy" id="fname" name="fname">

                    <label for="lname">Last Name</label>
                    <input type="text" placeholder="Bob" id="lname" name="lname">

                    <label for="email">Email</label>
                    <input type="text" placeholder="Email" id="email" name="email">

                    <label for="username">Username</label>
                    <input type="text" placeholder="Username" id="username" name="username">
        
                    <label for="password">Password</label>
                    <input type="password" placeholder="Password" id="password" name="password"><br>
                    <p style="font-size: 0.5em;">password must be at least 5 characters and<br /> have a special character, e.g. !#$.,:;()</font></p><br>
                    <p style="font-size: 0.5em;">Already have an account? <a href="./loginPage.html">Login here</a></p>
        
                    <button type="submit" name="submit">Sign Up</button>
                    
                </form>
            </div>
        </header>
        <section id="description">
            <div>
                <h1 id="action_call">HAVING TROUBLE ORGANIZING?</h1>
            </div>
            <div id="cardholder">
                <div class="wrapper">
                    <div class="card">
                        <div class="content">
                            <h2>01</h2>
                            <h3>Card One</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo eligendi nesciunt vero non quisquam, totam quidem iusto possimus corrupti delectus alias quo molestiae? Sequi, ab commodi velit quos fugit accusantium.</p>    
                            <a href="#">Read More</a> 
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h2>02</h2>
                            <h3>Card Two</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo eligendi nesciunt vero non quisquam, totam quidem iusto possimus corrupti delectus alias quo molestiae? Sequi, ab commodi velit quos fugit accusantium.</p>    
                            <a href="#">Read More</a> 
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <h2>03</h2>
                            <h3>Card Three</h3>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo eligendi nesciunt vero non quisquam, totam quidem iusto possimus corrupti delectus alias quo molestiae? Sequi, ab commodi velit quos fugit accusantium.</p>    
                            <a href="#">Read More</a> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="landing.js"></script>
        <script src="vanilla-tilt.js"></script>
        <script>
            VanillaTilt.init(document.querySelectorAll(".card")
                ,{
		        max: 25,
		        speed: 400,
                glare: true,
                "max-glare": 0.5,
	        });
        </script>
    </body>
</html>