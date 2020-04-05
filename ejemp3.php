<php
     <?
models = [];
 
foreach ($inputValues as $inputValue) {
    $models[] = $valueRepository->findByValue($inputValue);
}
//

     $result = $connection->query("SELECT `x`,`y` FROM `values` 
WHERE `value`=" . $inputValue);
