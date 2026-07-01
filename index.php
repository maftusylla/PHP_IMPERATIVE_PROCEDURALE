 function champObligatoire(string $value,string $message): bool{
    if (empty($value)) {
        echo $message."\n";
        return  false;
    }
        return true;
 }
