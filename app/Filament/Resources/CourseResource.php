<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CourseResource\Pages;
use App\Filament\Resources\CourseResource\RelationManagers;
use App\Models\Course;
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
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\Repeater;

class CourseResource extends Resource
{
    protected static ?string $model = Course::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Pages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        FileUpload::make('image_thumb')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('650:435')
                            ->imageResizeTargetWidth('650')
                            ->imageResizeTargetHeight('435')
                            ->label('Image')
                            ->helperText('650*435'),
                        FileUpload::make('image')
                            ->image()
                            ->imageResizeMode('cover')
                            ->imageCropAspectRatio('771:451')
                            ->imageResizeTargetWidth('771')
                            ->imageResizeTargetHeight('451')
                            ->label('Image Large')
                            ->helperText('771*451'),

                        // Select::make('categories')
                        //     ->multiple()
                        //     ->relationship('categories', 'name')
                        //     ->searchable()
                        //     ->options($categories)
                        //     ->saveRelationshipsWhenHidden(),

                        // Select::make('author_id')
                        //     ->relationship('author', 'name')
                        //     ->searchable()
                        //     ->options($authors)
                        //     ->saveRelationshipsWhenHidden(),

                        // DatePicker::make('published_at')
                        //     ->label('Published At'),

                        Tabs::make('Heading')
                        ->tabs([
                            Tabs\Tab::make('Geo')
                                ->schema([
                                    TextInput::make('title.ka')
                                        ->label('Title Geo'),
                                    TextInput::make('intro.ka')
                                        ->label('Intro Geo'),
                                    RichEditor::make('description.ka')
                                        ->label('Body Geo'),
                                ]),
                            Tabs\Tab::make('Eng')
                            ->schema([
                                TextInput::make('title.en')
                                    ->label('Title Eng'),
                                TextInput::make('intro.en')
                                    ->label('Intro Eng'),
                                RichEditor::make('description.en')
                                    ->label('Body Eng'),
                            ]),
                        ]),
                        
                        // Repeater::make('skills')
                        //     ->schema([
                        //         TextInput::make('ka')
                        //             ->label('Skills Geo'),
                        //         TextInput::make('en')
                        //             ->label('Skills Eng')
                        //         ]),

                               

                        TextInput::make('duration')
                            ->label('Duration')
                            ->helperText('Length of course'),

                        TextInput::make('visits')
                            ->label('Visits')
                            ->helperText('Total visits'),
                            
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
            'index' => Pages\ListCourses::route('/'),
            'create' => Pages\CreateCourse::route('/create'),
            'edit' => Pages\EditCourse::route('/{record}/edit'),
        ];
    }    
}
