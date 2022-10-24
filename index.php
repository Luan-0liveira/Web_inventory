<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web inventory</title>
</head>
<body>
    <main>
        <section id="left">
            <form action="">
                <h2>Select inventory</h2>
                <input type="text" name="name" id="name">
                <h2>Create inventory</h2>
                <label for="name">Name inventory</label>
                <input type="text" name="name" id="name">
                <label for="column">Number column</label>
                <input type="number" name="column" id="column">
                <label for="name_column">Name column</label>
                <input type="text" name="name_column" id="name_column">
                <label for="type_column">Type column: </label>
                <input type="radio" name="type_column" id="type_Caracter">
                <label for="type_column">Caracter</label>
                <input type="radio" name="type_column" id="type_number">
                <label for="type_column">Number</label>
                <label for="not_null">not_null</label>
                <input type="checkbox" name="not_null" id="not_null">
                <button type="submit">Submit</button>
            </form>
        </section>
        <section id="right">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Number column</th>
                    <th>Name column</th>
                    <th>Type column</th>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>