<?php 
class OpenWeather {
    
    private $apiKey;
    
    public function __construct(string $apiKey) {
        $this->apiKey = $apiKey;
    }

    public function getForecast(): ?array {
        $curl = curl_init("https://api.openweathermap.org/data/2.5/onecall?lat=33.441792&lon=-94.037689&exclude=hourly,daily&appid={$this->apiKey}&units=metric&lang=fr");
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CAINFO => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'cert.cer',
            CURLOPT_TIMEOUT => 1
        ]);
        $data = curl_exec($curl);

        if ($data === false || curl_getinfo($curl, CURLINFO_HTTP_CODE) !== 200) {
            return null;
        }
        
        $results = [];
        $data = json_decode($data, true);
        foreach ($data as $hour) {
            $results[] = [
                'temp' => $hour['temp'],
                'clouds' => $hour['current']['clouds']
            ];
        }
        return $results;
    }

}

?>