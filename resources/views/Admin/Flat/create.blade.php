<x-app-layout>
    <div class="col-12">
        <div class="card">
            <form action="/action_page.php">
                <div class="card__handler">
                    <div class="first__card">
                        <h1>The Phase elements</h1>

                            <label for="cars">Choose a Phase:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            
                    
                    </div>

                    <div class="second__card">
                        <h1>The Building element</h1>

                        
                            <label for="cars">Choose a Building:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            
                    
                    </div>

                    <div class="third__card">
                        <h1>The Floor element</h1>

                    
                            <label for="cars">Choose a Floor:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            
                        
                    </div>

                    <div class="fourth__card">
                        <h1>The Type element</h1>

                    
                            <label for="cars">Choose a Type:</label>
                            <select name="cars" id="cars">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                            
                        </div>
                    </div>
                    <div>
                        <label for="name">Flat Name</label>
                        <input type="text" name="name">
                    </div>
                    
                    <div>
                        <label for="name">Flat Quantity</label>
                        <input type="text" name="quantity">
                    </div>
                    
                </div>
            </div>

            </form>
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