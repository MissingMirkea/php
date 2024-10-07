<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adăugare Elev</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Adăugare Elev</h2>
        <form action="insert_student.php" method="post">
            <label for="nume_prenume">Nume și Prenume</label>
            <input type="text" id="nume_prenume" name="nume_prenume" required>
            
            <label for="idnp">IDNP</label>
            <input type="text" id="idnp" name="idnp" maxlength="13" required>
            
            <label for="anul_studiu">Anul de studiu</label>
            <input type="number" id="anul_studiu" name="anul_studiu" required>
            
            <label for="anul_nasterii">Anul nașterii</label>
            <input type="number" id="anul_nasterii" name="anul_nasterii" required>
            
            <label for="grupa">Grupa</label>
            <input type="text" id="grupa" name="grupa" required>
            
            <label for="specialitatea">Specialitatea</label>
            <input type="text" id="specialitatea" name="specialitatea" required>
            
            <input type="submit" value="Adaugă Elev">
        </form>
    </div>

</body>
</html>
