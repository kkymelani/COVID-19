$.getJSON('https://open-covid-19.github.io/data/data_latest.json', function(data) {

    var stats = document.getElementsByClassName('stats')[0];
    for (var i = 0; i < data.length; i++) {
        // console.log(data[i].RegionName);
        if (data[i].CountryCode == 'ID') {
            if (data[i].RegionCode == null) {

            } else {
                // console.log(data[i].RegionName);
                // console.log(data[i].Confirmed);
                // console.log(data[i].Population);
                var regName = document.createElement('td');
                regName.innerHTML = data[i].RegionName;
                var confirmed = document.createElement('td');
                confirmed.innerHTML = data[i].Confirmed;
                var population = document.createElement('td');
                population.innerHTML = data[i].Population;
                console.log(data[i]);

                var tr = document.createElement('tr');
                tr.appendChild(regName);
                tr.appendChild(confirmed);
                tr.appendChild(population);

                var stats = document.getElementsByClassName('stats')[0];
                stats.appendChild(tr);
            }
            
        }
    }
});