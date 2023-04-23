<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonResource\Pages;
use App\Filament\Resources\PersonResource\RelationManagers;
use App\Models\Job;
use App\Models\Person;
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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class PersonResource extends Resource
{
    protected static ?string $model = Person::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'Staff';

    public static function form(Form $form): Form
    {
        $jobs = [];
        $locale = app()->getLocale();
        foreach(Job::all()->toArray() as $item)
        {
            $jobs[$item['id']] = $item['name'][$locale];
        }
        
        return $form
        ->schema([
            Card::make()
                ->schema([
                    FileUpload::make('image')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('371:450')
                        ->imageResizeTargetWidth('371')
                        ->imageResizeTargetHeight('450')
                        ->label('Image')
                        ->helperText('371*450'),

                    Select::make('jobs')
                        ->multiple()
                        ->relationship('jobs', 'name')
                        ->searchable()
                        ->options($jobs)
                        ->saveRelationshipsWhenHidden(),
                    // Select::make('jobs')
                    //     ->multiple()
                    //     ->options($jobs),
                    Tabs::make('Heading')
                        ->tabs([
                            Tabs\Tab::make('Geo')
                                ->schema([
                                    TextInput::make('name.ka')->label('Name Geo'),
                                    TextInput::make('surname.ka')->label('Surname Geo'),
                                    TextInput::make('position.ka')->label('Position Geo'),
                                    TextInput::make('license.ka')->label('License Geo'),
                                    RichEditor::make('biography.ka')
                                        ->label('Biography Geo')
                                        ->toolbarButtons([
                                            'attachFiles',
                                            'blockquote',
                                            'bold',
                                            'bulletList',
                                            'codeBlock',
                                            'h2',
                                            'h3',
                                            'italic',
                                            'link',
                                            'orderedList',
                                            'redo',
                                            'strike',
                                            'undo',
                                        ])
                                ]),
                            Tabs\Tab::make('Eng')
                            ->schema([
                                TextInput::make('name.en')->label('Name Eng'),
                                TextInput::make('surname.en')->label('surname Eng'),
                                TextInput::make('position.en')->label('Position Eng'),
                                TextInput::make('license.en')->label('License Eng'),
                                RichEditor::make('biography.en')
                                    ->label('Biography Eng')
                                    ->toolbarButtons([
                                        'attachFiles',
                                        'blockquote',
                                        'bold',
                                        'bulletList',
                                        'codeBlock',
                                        'h2',
                                        'h3',
                                        'italic',
                                        'link',
                                        'orderedList',
                                        'redo',
                                        'strike',
                                        'undo',
                                    ])
                                
                            ]),
                        ]),
                    TextInput::make('socials.facebook')->label('Facebook'),
                    TextInput::make('socials.twitter')->label('Twitter'),
                    TextInput::make('socials.instagram')->label('instagram'),
                    TextInput::make('socials.linkedin')->label('Linkedin'),
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
                TextColumn::make('name'),
                TextColumn::make('surname'),
                TextColumn::make('type'),
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
            'index' => Pages\ListPeople::route('/'),
            'create' => Pages\CreatePerson::route('/create'),
            'edit' => Pages\EditPerson::route('/{record}/edit'),
        ];
    }    
}
