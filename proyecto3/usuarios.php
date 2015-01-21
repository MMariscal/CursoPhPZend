Formulario de registro

<form action="procesar.php" method="post" >
    <ul>
        <li>
            <input type="hidden" name="id" value="1">
        </li>
        <li>
            <label>Name</label>
            <input type="text" name="name">
        </li>
        <li>
            <label>Email</label>
            <input type="text" name="text">
        </li>
        <li>
            <label>Password</label>
            <input type="password" name="password">
        </li>
        <li>
            <label>Description</label>
            <input type="textarea" cols="10" rows="3" name="description">
        </li>
        <li>
            <label>Photo</label>
            <input type="file" name="photo">
        </li>
        <li>
            <label>Sexo</label>
            <input type="radio" name="name" value="M">
            <input type="radio" name="name" value="F">
        </li>
        <li>
            <label>City</label>
            <select name="city">
                <option>Castellon</option>
                <option>Valencia</option>
            </select>
        </li>
        <li>
            <label>Hobbies</label>
            <select name="hobbies[]" multiple>
                <option>Leer</option>
                <option>Juegos Consola</option>
                <option>Juegos PC</option>
            </select>
        </li>
        <li>
            <label>Politics</label>
            <input type="checkbox" name="politics[]" value="no" checked >No
            <input type="checkbox" name="politics[]" value="si" >Si
            <input type="checkbox" name="politics[]" value="puede" >Puede
        </li>
        <li>
            <label>Submit</label>
            <input type="submit" name="submit" value="Send Data">
        </li>
        <li>
            <label>Reset</label>
            <input type="reset" name="reset" value="Reset data">
        </li>
        
    </ul>
</form>