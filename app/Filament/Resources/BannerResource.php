<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
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
use Filament\Forms\Components\TextInput;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    FileUpload::make('back_image')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('1920:676')
                        ->imageResizeTargetWidth('1920')
                        ->imageResizeTargetHeight('676')
                        ->label('Back Image')
                        ->helperText('1920*676'),
                    FileUpload::make('image')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('536:648')
                        ->imageResizeTargetWidth('536')
                        ->imageResizeTargetHeight('648')
                        ->label('Image')
                        ->helperText('536*648'),
                    TextInput::make('url')
                        ->label('Resource URL'),
                    Tabs::make('Heading')
                        ->tabs([
                            Tabs\Tab::make('Geo')
                                ->schema([
                                    TextInput::make('title.ka')
                                        ->label('Title Geo'),
                                    TextInput::make('sub_title.ka')
                                        ->label('Sub Title Geo'),
                                    RichEditor::make('description.ka')
                                        ->label('Description Geo')
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
                                    TextInput::make('sub_title.en')
                                        ->label('Sub Title Eng'),
                                    RichEditor::make('description.en')
                                        ->label('Description Eng')
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
                //
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }    
}
