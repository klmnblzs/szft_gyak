document.addEventListener("DOMContentLoaded", () => {
    getCurrencies()
    latestEuroRates()
})

function getCurrencies() {
    fetch("http://api.frankfurter.app/currencies")
    .then(res => res.json())
    .then(data => loadSelect(data))
}

function loadSelect(data) {
    const toSelect = document.getElementById("toSelect")
    const fromSelect = document.getElementById("fromSelect")

    for(d in data) {
        toSelect.innerHTML += "<option value='"+d+"'>"+data[d]+"</option>"
        fromSelect.innerHTML += "<option value='"+d+"'>"+data[d]+"</option>"
    }
}

function exchange() {
    const toSelect = document.getElementById("toSelect")
    const fromSelect = document.getElementById("fromSelect")
    const fromValue = document.getElementById("fromValue")
    const resultBox = document.getElementById("resultValue")

    fetch(`https://api.frankfurter.app/latest?from=${fromSelect.value}&to=${toSelect.value}&amount=${fromValue.value}`)
    .then(res => res.json())
    .then(data => {
        for(d in data.rates) {
            resultBox.value = data.rates[d]
        }
    })
}

function latestEuroRates() {
    const table = document.getElementsByTagName("tbody")[0]
    
    fetch(`https://api.frankfurter.app/latest`)
    .then(res => res.json())
    .then(data => {
        for(d in data.rates) {
            let row = table.insertRow()
    
            let currency = row.insertCell()
            let value = row.insertCell()
    
            currency.innerHTML = d
            value.innerHTML = data.rates[d]
        }
    })
}