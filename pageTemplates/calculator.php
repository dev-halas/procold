<?php
/* 
    TEMPLATE NAME: Kalkulator
*/
    
    get_header(); ?>


<main class="calculator">
    <div class="calcPattern"></div>
    <div class="container calcForm">
        <div class="calculatorInner">
            <div class="calculatorFields">
                <div class="calculatorField">
                    <div class="pipeLength">
                        <span>Długość rury</span>
                        <div class="calcInput">
                            <input type="number" name="pipeLength">
                            <span class="pipeUnit">
                                <input type="checkbox" name="unit" id="">
                            </span>
                        </div>
                    </div>
                    <div class="diameterInner">
                        <span>Średnica wewnętrzna rury</span>
                        <div class="calcInput">
                            <input type="number" name="diameterInner">
                            <span class="diametterUnit">
                                <input type="checkbox" name="unit" id="">
                            </span>
                        </div>
                    </div>
                    <div class="tankCapacity">
                        <span>Pojemność dodatkowych zbiorników w instalacji</span>
                        <div class="calcInput">
                            <input type="number" name="tankCapacity">
                            <span class="tankUnit">litrów</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calcButtons">
                <button class="addNextCalc">Dodaj wymiar</button>
                <button class="calcResult">Oblicz pojemność</button>
            </div>
            <div class="resultWrapper">
                <h3>podsumowanie</h3>
                <span>pojemność całkowita</span>
                <div class="result">
                    <div class="resultValue">&nbsp</div> 
                </div>
            </div>
        </div>
        <img src="<?php echo THEME_URL; ?>_dev/img/telefon-kalkulator.png" alt="calculator" class="calcBG">

    </div>
    
    <div class="colorsLine bottomLineLeft"></div>
    
    
</main>



<?php get_footer(); ?>