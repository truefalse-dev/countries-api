const endpoint = `http://135.181.96.169:9001/mycountries/v1.1/`;
// Отримати відповідь від сервера
const fetchData = async () => {
    const response = await fetch(`${endpoint}getcountrieslist`);
    const { data } = await response.json();
    const countries = data;

    // Заповнити випадаючий список
    const dropdown = document.getElementById('countries');
    countries.forEach(country => {
        const option = document.createElement('option');
        option.text = country.name;
        option.value = country.alias;
        dropdown.appendChild(option);
    });

    // Функція для виведення інформації про країну
function displayCountryInfo() {
    const selectedCountry = document.getElementById('countries').value;
    const country = countries.find(c => c.alias == selectedCountry);

    // Отримати додаткові дані про країну (включаючи інформацію про континент)
    fetch(`${endpoint}getcountry/${selectedCountry}`)
        .then(response => response.json())
        .then(countryDetails => {
            
            const continent = countryDetails.data.continent || 'N/A';

            const countryInfoDiv = document.getElementById('countryInfo');
            countryInfoDiv.innerHTML = 
                `<h2>${country.name}</h2>
                <p>Capital: ${country.capital}</p>
                <p>Population: ${country.population}</p>
                <p>Flag: <img src="${country.flags}" alt="${selectedCountry} Flag" width="100"></p>
                <p>Languages: ${country.languages}</p>
                <p>Area: ${country.area} square kilometers</p>
                <p>Continent: ${continent}</p>`;
        })
}
    // Додайте обробник подій для виклику функції при зміні випадаючого списку
    dropdown.addEventListener('change', displayCountryInfo);
};

fetchData();
