    // USD - United States Dollar
function bitTypeUsd() {
    // indicate that the code should be executed in "strict mode" so no undeclared variables are being used
    "use strict";
    // Declares variables and maintains a fixed 8 digit decimal place
    var bitcoin = 1;
    var currency = 6105.87;
    var usd = document.getElementById('usdInput').value;
    var usdDollar = usd * (bitcoin * currency);
    var amount = document.getElementById('usdValue');
    amount.innerHTML = "&#x24;" + usdDollar.toFixed(2);
    /* Formated numbers to currency with commas */
    amount.innerHTML = usdDollar.toLocaleString(undefined, {style: 'currency', currency: 'USD', minimumFractionDigits: 2, maximumFractionDigits: 2});
    // Checks if value is entered. If so, change currency to reflect price of one bitcoin in current currency
    if (usd) {
        document.getElementById('monetaryUsd').innerHTML = "&#x24;" + "1,320.39";
    } else if (!usd) {
        document.getElementById('monetaryUsd').innerHTML = "USD - United States Dollar";
    }
    // Adds error message, border to cells, prevents currency changes when error is displayed, and maintains border around amount cell
    if (usd === '.') {
        document.getElementById('usdValue').innerHTML = "&#x24;" + "0.00";
    } else if (isNaN(usd)) {
        document.getElementById('usdInput').style.border = "thick solid #FF0000";
        document.getElementById('usdValue').style.border = "thick solid #FF0000";
        document.getElementById('usdValue').innerHTML = "&#x24;" + "0.00";
        document.getElementById('monetaryUsd').innerHTML = "USD - United States Dollar";
        document.getElementById('bitTitle').innerHTML = "Numeric and Decimals Only!";
    } else if (usd === "") {
        document.getElementById('usdInput').style.border = "#000000";
        document.getElementById('usdValue').removeAttribute('style');
        document.getElementById('bitTitle').innerHTML = "";
    }
}