<?php

namespace App\Filament\Resources\Ideas\Tables;

use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class IdeasTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->heading('Ideas - Karen Nayeli Hernández González')
            ->columns([
                TextColumn::make('id')
                    ->label('#')
                    ->searchable(),
                TextColumn::make('titulo')
                    ->label('Idea')
                    ->searchable(),
                TextColumn::make('descripcion')
                    ->label('Descripción')
                    ->searchable(),
                TextColumn::make('estado')
                    ->label('Estado')
                    ->searchable(),
                TextColumn::make('autor')
                    ->label('Autor')
                    ->searchable(),
                TextColumn::make('categoria.nombre')
                    ->label('Categoría')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Creado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Actualizado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('estado')
                ->label('Estado')
                ->options([
                    'registrada' => 'Registrada',
                    'en revisión' => 'En revisión',
                    'aprobada' => 'Aprobada',
                    'rechazada' => 'Rechazada',
                ]),
            ])
            ->recordActions([
                EditAction::make(),
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
