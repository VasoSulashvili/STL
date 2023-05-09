<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IntroResource\Pages;
use App\Filament\Resources\IntroResource\RelationManagers;
use App\Models\Intro;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Checkbox;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\TextInput;

class IntroResource extends Resource
{
    protected static ?string $model = Intro::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Home';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
                ->schema([
                    FileUpload::make('image_1')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('283:339')
                        ->imageResizeTargetWidth('283')
                        ->imageResizeTargetHeight('339')
                        ->label('Image')
                        ->helperText('283*339'),
                    FileUpload::make('image_2')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('283:339')
                        ->imageResizeTargetWidth('283')
                        ->imageResizeTargetHeight('339')
                        ->label('Image')
                        ->helperText('283*339'),

                    Tabs::make('Heading')
                        ->tabs([
                            Tabs\Tab::make('Geo')
                                ->schema([
                                    TextInput::make('title.ka')
                                        ->label('Title Geo'),
                                    RichEditor::make('text.ka')
                                        ->label('Text Geo')
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
                                        ]),
                                ]),
                            Tabs\Tab::make('Eng')
                                ->schema([
                                    TextInput::make('title.en')
                                        ->label('Title Eng'),
                                    RichEditor::make('text.en')
                                        ->label('Text Eng')
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
                                    ]),
                                ]),
                        ])
                    ]),
                    Checkbox::make('active')
                        ->label('Active')
                        ->helperText('On if active'),
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('title'),
                TextColumn::make('text')
                    ->limit(50)
                    ->wrap()
                    ->html(),
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
            'index' => Pages\ListIntros::route('/'),
            'create' => Pages\CreateIntro::route('/create'),
            'edit' => Pages\EditIntro::route('/{record}/edit'),
        ];
    }    
}
