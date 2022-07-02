<html>
    <head>
        <title>Gate pass</title>
        <meta charset="UTF-8">
        <style>
            h2{
                text-align: center;
                background-color: chocolate;
                text-transform: capitalize;
                font-style: italic;
                font-family:Arial, Helvetica, sans-serif;
            }
            body{
                background-color: cadetblue;
                margin: 5%;
            }
            form{
                background-color: blanchedalmond;
                align-content: center;
                background-image: image('entrance.png');
            }
            img{
                align-items: center;
            }
        </style>
        
    </head>
    <body>
        <img src="entrance.png"  alt="entrance">
        <h2>Gate pass </h2>
        <form action="data.php" method="post">
            <div id="name">
            <label>Name:<input type="text" name="username" required></label>
            </div><br>
            <div id="roll">
                <label>ROLL:NO <input type="text" name="rlno" maxlength="12" required></label>
            </div><br>
            <div>
                <label>Email.id <input type="email" name="email" required></label>
            </div><br>
            <div>
                <label>Select your branch </label>
                <select name="class" id="class">
                    <option value="cse">CSE</option>
                    <option value="ece">ESE</option>
                    <option value="eee">EEE</option>
                    <option value="mech">MECH</option>
                    <option value="civil">CIVIL</option>
                </select>
                
            </div><br>
            <div>
                <label>phone number</label>
                <input type="tel" name="phonenumber" required maxlength="10" >
            </div>
            <div>
                <textarea name="reason" placeholder="enter your reason here " rows="10" cols="50" requrired></textarea>
            </div><br>
            <div>
                <button type="submit">submit</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </body>
</html>