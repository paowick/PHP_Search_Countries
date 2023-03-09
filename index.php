<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $globe = array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czechia", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe");
    $asia = array("Kazakhstan", "Kyrgyzstan", "Tajikistan", "Turkmenistan", "Uzbekistan", "China", "Democratic People's Republic of Korea", "Japan", "Mongolia", "Republic of Korea", "Afghanistan", "Bangladesh", "Bhutan", "India", "Iran", "Maldives", "Nepal", "Pakistan", "Sri Lanka", "Brunei Darussalam", "Cambodia", "Indonesia", "Lao People's Democratic Republic", "Malaysia", "Myanmar", "Philippines", "Singapore", "Thailand", "Timor-Leste", "Viet Nam", "Armenia", "Azerbaijan", "Bahrain", "Cyprus", "Georgia", "Iraq", "Israel", "Jordan", "Kuwait", "Lebanon", "Oman", "Qatar", "Saudi Arabia", "State of Palestine", "Syrian Arab Republic", "Turkey", "United Arab Emirates", "Yemen");
    $allDocTextCountry = []
    ?>
    <h1>asia</h1>
    <div style="margin: 10px auto;">
        <b style="font-size: 30px;">doc01:</b>
    </div>
    <div>
        <?php
        $allCountry = [];
        $textIN = fopen("src/hw-doc01.txt", "r");
        $textREAD = fread($textIN, filesize("src/hw-doc01.txt"));
        fclose($textIN);
        foreach ($asia as $temp) {
            if (stripos($textREAD, $temp) != null) {
                $allCountry[] = $temp;
                $allDocTextCountry[] = $temp;
            }
        }
        sort($allCountry);
        if (count($allCountry) > 0) {
            $str = implode('<br>', $allCountry);
            echo "$str";
        }
        ?>
    </div>
    <div style="margin: 10px auto;">
        <b style="font-size: 30px;">doc02:</b>
    </div>
    <div>
        <?php
        $allCountry = [];
        $textIN = fopen("src/hw-doc02.txt", "r");
        $textREAD = fread($textIN, filesize("src/hw-doc02.txt"));
        fclose($textIN);
        foreach ($asia as $temp) {
            if (stripos($textREAD, $temp) != null) {
                $allCountry[] = $temp;
                $allDocTextCountry[] = $temp;
            }
        }
        sort($allCountry);
        if (count($allCountry) > 0) {
            $str = implode('<br>', $allCountry);
            echo "$str";
        }
        ?>
    </div>
    <div style="margin: 10px auto;">
        <b style="font-size: 30px;">doc03:</b>
    </div>
    <div>
        <?php
        $allCountry = [];
        $textIN = fopen("src/hw-doc02.txt", "r");
        $textREAD = fread($textIN, filesize("src/hw-doc02.txt"));
        fclose($textIN);
        foreach ($asia as $temp) {
            if (stripos($textREAD, $temp) != null) {
                $allCountry[] = $temp;
                $allDocTextCountry[] = $temp;
            }
        }
        sort($allCountry);
        if (count($allCountry) > 0) {
            $str = implode('<br>', $allCountry);
            echo "$str";
        }
        ?>
    </div>
    <div style="margin: 10px auto;">
        <b style="font-size: 30px;">All doc:</b>
    </div>
    <div>
    <?php
    for ($i = 0; $i < sizeof($allDocTextCountry); $i++) {
        for ($j = $i+1; $j < sizeof($allDocTextCountry); $j++) {
            if($allDocTextCountry[$i] == $allDocTextCountry[$j]){
                $allDocTextCountry[$j] = '';
            }
        }
    }
    sort($allDocTextCountry);
    foreach($allDocTextCountry as $textFinal){
        if($textFinal == ''){continue;}
        echo "$textFinal<br>";
    }
    ?>
    </div>
</body>
</html>