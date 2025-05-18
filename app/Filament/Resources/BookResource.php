<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Models\Book;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            FileUpload::make('cover')
                ->label('Sampul')
                ->image()
                ->imagePreviewHeight('150')
                ->directory('covers')
                ->visibility('public')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                ->maxSize(2048)
                ->columnSpan('full'),

            TextInput::make('title')->required()->maxLength(255)->label('Judul'),
            TextInput::make('author')->required()->maxLength(255)->label('Penulis'),
            TextInput::make('publisher')->required()->maxLength(255)->label('Penerbit'),
            TextInput::make('year')->required()->numeric()->label('Tahun Terbit'),
            TextInput::make('isbn')->required()->maxLength(20)->label('ISBN'),
            TextInput::make('stock')->required()->numeric()->label('Stok'),

            Select::make('category')
                ->label('Kategori')
                ->required()
                ->options([
                    'fiksi' => 'Fiksi',
                    'nonfiksi' => 'Nonfiksi',
                ]),

            TextInput::make('genre')
                ->label('Genre')
                ->required()
                ->maxLength(100),

            TextInput::make('location')->maxLength(255)->label('Lokasi'),
            Textarea::make('description')->label('Deskripsi')->columnSpan('full'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover')->label('Sampul')->disk('public')->circular(),
                TextColumn::make('title')->label('Judul')->searchable()->sortable(),
                TextColumn::make('author')->label('Penulis')->searchable(),
                TextColumn::make('publisher')->label('Penerbit'),
                TextColumn::make('year')->label('Tahun'),
                TextColumn::make('stock')->label('Stok'),
                TextColumn::make('category')->label('Kategori'),
                TextColumn::make('genre')->label('Genre'),
                TextColumn::make('location')->label('Lokasi'),
            ])
            ->filters([
                SelectFilter::make('category')
                    ->label('Filter Kategori')
                    ->options([
                        'fiksi' => 'Fiksi',
                        'nonfiksi' => 'Nonfiksi',
                    ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
