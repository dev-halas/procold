<?php
/* 
    TEMPLATE NAME: Kalkulator
*/
    
    get_header(); 

    $calc_pipe_length = get_field('calc_pipe_length', 'options');
    $calc_pipe_diameter = get_field('calc_pipe_diameter', 'options');
    $calc_capacity = get_field('calc_capacity', 'options');
    $calc_add_button = get_field('calc_add_button', 'options');
    $calc_calculate_button = get_field('calc_calculate_button', 'options');
    $calc_sum = get_field('calc_sum', 'options');
    $calc_sum_capacity = get_field('calc_sum_capacity', 'options');
?>


<main class="calculator">
    <div class="calcPattern"></div>
    <div class="container calcForm animate">
        <div class="calculatorInner fadeIn d-600">
            <div class="calculatorFields">
                <div class="calculatorField">
                    <div class="pipeLength">
                        <span><?php echo $calc_pipe_length;?></span>
                        <div class="calcInput">
                            <input type="number" name="pipeLength">
                            <span class="pipeUnit">
                                <input type="checkbox" name="unit" id="">
                            </span>
                        </div>
                    </div>
                    <div class="diameterInner">
                        <span><?php echo $calc_pipe_diameter;?></span>
                        <div class="calcInput">
                            <input type="number" name="diameterInner">
                            <span class="diametterUnit">
                                <input type="checkbox" name="unit" id="">
                            </span>
                        </div>
                    </div>
                    <div class="tankCapacity">
                        <span><?php echo $calc_capacity;?></span>
                        <div class="calcInput">
                            <input type="number" name="tankCapacity">
                            <span class="tankUnit">litrów</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="calcButtons">
                <button class="addNextCalc"><?php echo $calc_add_button;?></button>
                <button class="calcResult"><?php echo $calc_calculate_button;?></button>
            </div>
            <div class="resultWrapper">
                <h3><?php echo $calc_sum;?></h3>
                <span><?php echo $calc_sum_capacity;?></span>
                <div class="result">
                    <div class="resultValue">&nbsp</div> 
                </div>
            </div>
        </div>
        <img src="<?php echo THEME_URL; ?>_dev/img/telefon-kalkulator.png" alt="calculator" class="calcBG fadeInRight d-600">

    </div>
    
    <div class="colorsLine bottomLineLeft"></div>
    
    
</main>



<?php get_footer(); ?>