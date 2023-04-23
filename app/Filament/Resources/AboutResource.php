<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Filament\Resources\AboutResource\RelationManagers;
use App\Models\About;
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
use Illuminate\Support\Str;

class AboutResource extends Resource
{
    protected static ?string $model = About::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';

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

                    Tabs::make('Heading')
                        ->tabs([
                            Tabs\Tab::make('Geo')
                                ->schema([
                                    RichEditor::make('overview.ka')
                                        ->label('Overview Geo')
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
                                    RichEditor::make('target.ka')
                                        ->label('Target Geo')
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
                                
                                    RichEditor::make('mission.ka')
                                        ->label('Mission Geo')
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
                                    RichEditor::make('overview.en')
                                        ->label('Overview Eng')
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
                                    RichEditor::make('target.en')
                                        ->label('Target Eng')
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
                                    RichEditor::make('mission.en')
                                    ->label('Mission Eng')
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
                TextColumn::make('overview')
                    ->limit(50)
                    ->wrap()
                    ->html(),
                TextColumn::make('mission')
                    ->limit(50)
                    ->wrap()
                    ->html(),
                TextColumn::make('target')
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }    
}
