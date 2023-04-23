<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Tabs;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-cash';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                            Tabs::make('Heading')
                            ->tabs([
                                Tabs\Tab::make('Geo')
                                    ->schema([
                                        TextInput::make('name.ka')
                                            ->label('Name Geo'),
                                    ]),
                                Tabs\Tab::make('Eng')
                                ->schema([
                                    TextInput::make('name.en')
                                        ->label('Name Eng'),
                                ]),

                            ]),

                            Checkbox::make('active')
                                ->label('Active')
                                ->helperText('On if active'),
                    ])
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                IconColumn::make('active')
                    ->boolean()

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }    
}
