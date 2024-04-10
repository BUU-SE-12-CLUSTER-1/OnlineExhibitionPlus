
<div>
<script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/form_input.css') }}">
    <form action="">
        @csrf
        <table>
            <tr></tr>
        </table>
        <label for="">Project name</label>
        <br>
        <input type="text">
        <br><br>
        <label for="">Year</label>&emsp;&emsp;<label for="">College Year</label> 
        <br>
        <input name="proj_created_year" type="number" min="2010" max="2099" step="1" value="2024" id="year-picker">
        <select id="college year" name="years">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        <br>
        <label for="">Major</label>&emsp;<label for="">Tag</label> 
        <br>
        <select id="major" name="majors">
        <option value="SE">SE</option>
        <option value="CS">CS</option>
        <option value="IT">IT</option>
        <option value="AAI">AAI</option>
        
        </select>
        <select id="tag" name="tags">
        <option value="tag1">MOM</option>
        <option value="tag2">DAD</option>
        </select>
        <br>
        <label for="">Company</label>
        <br>
        </select>
        <select id="company" name="companies">
        <option value="KFC">KFC</option>
        <option value="Pizza">Pizza</option>
        </select>

        <br>
        <button class="buttonAdd" type="submit" value="submint">Submit</button>

    </form>
</div>