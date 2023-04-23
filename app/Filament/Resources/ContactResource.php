<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
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
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-location-marker';

    protected static ?string $navigationGroup = 'Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('1920:500')
                            ->imageResizeTargetWidth('1920')
                            ->imageResizeTargetHeight('500')
                            ->label('Image')
                            ->helperText('1920*500'),

                        Repeater::make('emails')
                            ->schema([
                                TextInput::make('email')
                                ->label('Email')
                        ]),

                        Repeater::make('phones')
                            ->schema([
                                TextInput::make('phone')
                                ->label('Phone'),
                        ]),
                        

                        
                        Tabs::make('Heading')
                            ->tabs([
                                Tabs\Tab::make('Geo')
                                    ->schema([
                                        TextInput::make('address.ka')
                                            ->label('Address Geo'),
                                    ]),
                                Tabs\Tab::make('Eng')
                                ->schema([
                                    TextInput::make('address.en')
                                        ->label('Address Eng'),
                                ]),
                            ]),
                        
                        TextInput::make('socials.facebook')
                            ->label('Facebook'),
                        TextInput::make('socials.twitter')
                            ->label('Instagram'),
                        TextInput::make('socials.instagram')
                            ->label('Instagram'),
                        TextInput::make('socials.linkedin')
                            ->label('Linkedin'),
                        TextInput::make('map')
                            ->label('Map'),
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
                TextColumn::make('id'),
                TextColumn::make('address'),
                IconColumn::make('active')
                    ->boolean()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'view' => Pages\ViewContact::route('/{record}'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }  

}
