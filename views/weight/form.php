<form method="get" target="_self" class="flex flex-col gap-3">
    <div class="flex items-center gap-3">
        <label for="weight" class="w-1/3">Weight:</label>
        <input type="number" name="weight" id="weight" class="w-2/3 border-1 rounded-md p-1" required autofocus>
    </div>
    
    <div class="flex items-center gap-3">
        <label for="fromUnit" class="w-1/3">From Unit</label>
        <select name="fromUnit" id="fromUnit" class="w-2/3 border-1 rounded-md p-1 cursor-pointer">
            <option value="mg">Miligram</option>
            <option value="g">Gram</option>
            <option value="kg">Kilogram</option>                    
            <option value="oz">Ounce</option>                    
            <option value="lb">Pound</option>                    
        </select>
    </div>
    
    <div class="flex items-center gap-3">
        <label for="toUnit" class="w-1/3">To Unit</label>
        <select name="toUnit" id="toUnit" class="w-2/3 border-1 rounded-md p-1 cursor-pointer">
            <option value="mg">Miligram</option>
            <option value="g">Gram</option>
            <option value="kg">Kilogram</option>                    
            <option value="oz">Ounce</option>                    
            <option value="lb">Pound</option>                    
        </select>
    </div>
    
    <button type="submit" name="submit" value="submit" class="w-full border-1 rounded-md p-1 mt-3 cursor-pointer hover:bg-gray-300 focus:ring-2">Convert</button>
</form>
