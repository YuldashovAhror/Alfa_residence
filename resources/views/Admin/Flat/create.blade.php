<x-app-layout>
    <div class="col-12">
        <div class="card">
            <div class="card__handler">
                <div class="first__card">
                    <h1>The select element</h1>

                    <form action="/action_page.php">
                        <label for="cars">Choose a car:</label>
                        <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>

                <div class="second__card">
                    <h1>The select element</h1>

                    <form action="/action_page.php">
                        <label for="cars">Choose a car:</label>
                        <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>

                <div class="third__card">
                    <h1>The select element</h1>

                    <form action="/action_page.php">
                        <label for="cars">Choose a car:</label>
                        <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>

                <div class="fourth__card">
                    <h1>The select element</h1>

                    <form action="/action_page.php">
                        <label for="cars">Choose a car:</label>
                        <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        <br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <style>
            .card__handler {
                padding: 1rem 13rem 1rem 1rem;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            h1{
                margin-bottom: 1.5rem;
                font-size: 1.2rem;
            }
            label{
                font-size: 1rem;
                margin-right: 0.5rem;
            }
            select{
                border-radius: 1rem;
            }
            #cars {
                width: 7rem;
            }
        </style>
    </div>
</x-app-layout>