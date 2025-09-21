<form method="get" target="_self" class="flex flex-col gap-3">
    <div class="flex items-center gap-3">
        <label for="length" class="w-1/3">Length:</label>
        <input type="number" name="length" id="length" class="w-2/3 border-1 rounded-md p-1" required autofocus>
    </div>
    
    <div class="flex items-center gap-3">
        <label for="fromUnit" class="w-1/3">From Unit</label>
        <select name="fromUnit" id="fromUnit" class="w-2/3 border-1 rounded-md p-1 cursor-pointer">
            <option value="mm">Milimeter</option>
            <option value="cm">Centimeter</option>
            <option value="m">Meter</option>
            <option value="km">Kilometer</option>
            <option value="inch">Inch</option>
            <option value="ft">Foot</option>
            <option value="yd">Yard</option>
            <option value="mi">Mile</option>
        </select>
    </div>
    
    <div class="flex items-center gap-3">
        <label for="toUnit" class="w-1/3">To Unit</label>
        <select name="toUnit" id="toUnit" class="w-2/3 border-1 rounded-md p-1 cursor-pointer">
            <option value="mm">Milimeter</option>
            <option value="cm">Centimeter</option>
            <option value="m">Meter</option>
            <option value="km">Kilometer</option>
            <option value="inch">Inch</option>
            <option value="ft">Foot</option>
            <option value="yd">Yard</option>
            <option value="mi">Mile</option>
        </select>
    </div>
    
    <button type="submit" name="submit" value="submit" class="w-full border-1 rounded-md p-1 mt-3 cursor-pointer hover:bg-gray-300 focus:ring-2">Convert</button>
</form>