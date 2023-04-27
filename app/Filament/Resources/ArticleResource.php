<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use App\Models\Category;
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
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TagsInput;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Blog';

    public static function form(Form $form): Form
    {
        $categories = [];
        $locale = app()->getLocale();
        foreach(Category::all()->toArray() as $item)
        {
            $categories[$item['id']] = $item['name'][$locale];
        }
        $authors = [];
        foreach(Person::all()->toArray() as $item)
        {
            $authors[$item['id']] = $item['name'][$locale];
        }
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('770:400')
                            ->imageResizeTargetWidth('770')
                            ->imageResizeTargetHeight('400')
                            ->label('Image')
                            ->helperText('700*400'),

                        Select::make('categories')
                            ->multiple()
                            ->relationship('categories', 'name')
                            ->searchable()
                            ->options($categories)
                            ->saveRelationshipsWhenHidden(),

                        Select::make('author_id')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->options($authors)
                            ->saveRelationshipsWhenHidden(),

                        DatePicker::make('published_at')
                            ->label('Published At'),

                        Tabs::make('Heading')
                        ->tabs([
                            Tabs\Tab::make('Geo')
                                ->schema([
                                    TextInput::make('title.ka')
                                        ->label('Title Geo'),
                                    RichEditor::make('body.ka')
                                        ->label('Body Geo'),
                                ]),
                            Tabs\Tab::make('Eng')
                            ->schema([
                                TextInput::make('title.en')
                                    ->label('Title Eng'),
                                RichEditor::make('body.en')
                                    ->label('Body Eng'),
                            ]),

                        ]),
                        TagsInput::make('tag')
                            ->separator(',')
                            ->helperText('Use "," to seperate tags'),

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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }    
}
