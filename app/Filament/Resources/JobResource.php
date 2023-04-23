<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Staff';

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
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable(),
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }    
}
