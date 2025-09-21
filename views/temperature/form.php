<form method="get" target="_self" class="flex flex-col gap-3">
    <div class="flex items-center gap-3">
        <label for="temperature" class="w-1/3">Temperature:</label>
        <input type="number" name="temperature" id="temperature" class="w-2/3 border-1 rounded-md p-1" required autofocus>
    </div>
    
    <div class="flex items-center gap-3">
        <label for="fromUnit" class="w-1/3">From Unit</label>
        <select name="fromUnit" id="fromUnit" class="w-2/3 border-1 rounded-md p-1 cursor-pointer">
            <option value="c">Celcius</option>
            <option value="f">Fahrenheit</option>
            <option value="k">Kelvin</option>                    
        </select>
    </div>
    
    <div class="flex items-center gap-3">
        <label for="toUnit" class="w-1/3">To Unit</label>
        <select name="toUnit" id="toUnit" class="w-2/3 border-1 rounded-md p-1 cursor-pointer">
            <option value="c">Celcius</option>
            <option value="f">Fahrenheit</option>
            <option value="k">Kelvin</option>                    
        </select>
    </div>
    
    <button type="submit" name="submit" value="submit" class="w-full border-1 rounded-md p-1 mt-3 cursor-pointer hover:bg-gray-300 focus:ring-2">Convert</button>
</form>