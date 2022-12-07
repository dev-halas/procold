const calcField = document.querySelector('.calculatorField');
const addNextCalc = document.querySelector('.addNextCalc');
const calcResultButton = document.querySelector('.calcResult');
const resultValue = document.querySelector('.resultValue')


let result = 0;

//Getting all values even with cloned Node elements
const getCalcValues = () => {
    //resset result
    result = 0;
    const getAllFields = document.querySelectorAll('.calculatorField');
    //loop for all inputs values from node and calculate
    getAllFields.forEach((calc, index) => {
        let pipeLength = parseInt(document.getElementsByName("pipeLength")[index].value)
        let diametterInner = parseInt(document.getElementsByName("diameterInner")[index].value)
        let tankCapacity = parseInt(document.getElementsByName("tankCapacity")[index].value)

        isNaN(pipeLength) ? pipeLength = 0 : pipeLength
        isNaN(diametterInner) ? diametterInner = 0 : diametterInner
        isNaN(tankCapacity) ? tankCapacity = 0 : tankCapacity

        const pipeUnit = calc.querySelector('span.pipeUnit > input').checked
        const diametterUnit = calc.querySelector('span.diametterUnit > input').checked
        
        const pipeToggle = calc.querySelector('span.pipeUnit > input')
        const diametterToggle = calc.querySelector('span.diametterUnit > input')

        // check Unit metter or centimetter
        pipeUnit === true ? pipeLength *= 100 : pipeLength
        diametterUnit === true ? diametterInner *= 100 : diametterInner


        let capacity = (((Math.PI * (diametterInner / 2) ** 2) * pipeLength ) / 1000)

        result = result + capacity + tankCapacity;

        //toggle trigger
        pipeToggle.addEventListener('click', getCalcValues)
        diametterToggle.addEventListener('click', getCalcValues)

    })

    resultValue.innerText = (Math.round(result * 100) / 100) + ' L'
}

//Cloning inputs 
const duplicate = () => {
    
    //clone calc fields
    const calcClone = calcField.cloneNode(true);
    // add cloned child
    calcField.parentNode.appendChild(calcClone);
    
    // clear Inputs on clone Node element
    const inputs = calcClone.querySelectorAll('input')
    inputs.forEach(input => {
        input.value = ''
    })
}

addNextCalc.addEventListener('click', duplicate)
calcResultButton.addEventListener('click', getCalcValues)

