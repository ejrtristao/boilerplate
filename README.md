# Boilerplate

Esse repositório contém os pacotes necessários para gerar Cruds Básicos

# Pacotes

 - Laravel
 - Infyom Generators - Template Stisla
 - Debbugbar

# Instalação

 - Clone o repositório
 - composer update
 - cp .env.example .env
 - ajustes .env
 - `php artisan config:cache`
 - `php artisan config:clear`
 - `php artisan key:generate`
 - `php artisan ui stisla --auth`
 - `npm install`
 - `npm run dev`

 # Dicas

 - `php artisan infyom:scaffold $MODEL_NAME --fromTable --tableName=$TABLE_NAME --prefix=admin --primary=$ID`

 # Valores

 - model
 - `    public function setVALORAttribute($value)
{
    return $this->attributes['VALOR'] = number_format(str_replace(",",".",str_replace(".","",$value)), 2, '.', '');
}
`
 - blade fields.php
 - 
 `
    /**
     * @param string $value
     * @return float
     */
    public function setVLRAttribute($value)
    {
        return $this->attributes['VLR'] = number_format(str_replace(",",".",str_replace(".","",$value ?? 0.00)), 2, '.', '');
    }
    
    /**
     * @return float
     */
    public function getVLRAttribute()
    {
        return number_format($this->attributes['VLR'],2,',','.');
    }
`


