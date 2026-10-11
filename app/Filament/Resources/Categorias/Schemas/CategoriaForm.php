<?php

namespace App\Filament\Resources\Categorias\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CategoriaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->label('Nombre de categoría')
                    ->helperText('Ingresa el nombre de la categoría')
                    ->placeholder('Ej:Categoría')
                    //->disabled(1 != 1)
                    ->required(), //Campo requerido 
                Textarea::make('descripcion')
                    ->label('Descripción')
                    ->helperText('Ingresa una descripción completa')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
