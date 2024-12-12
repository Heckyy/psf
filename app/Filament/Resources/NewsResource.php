<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\Article;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slugs')
                    ->required()
                    ->minLength(5)
                    ->maxLength(255)
                    ->unique('articles', 'slugs'),
                Forms\Components\TextInput::make('title_indonesia')
                    ->required()
                    ->minLength(5)
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('title_english')
                    ->required()
                    ->minLength(5)
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->imageEditor()
                    ->columnSpan(4)
                    ->required(),
                Forms\Components\RichEditor::make('content_indonesia')
                    ->columnSpan(4),
                Forms\Components\RichEditor::make('content_english')
                    ->columnSpan(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slugs'),
                Tables\Columns\TextColumn::make('title_indonesia'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}