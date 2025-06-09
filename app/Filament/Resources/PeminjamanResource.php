<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeminjamanResource\Pages;
use App\Models\Peminjaman;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class PeminjamanResource extends Resource
{
    protected static ?string $model = Peminjaman::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Manajemen Buku';

    protected static ?string $modelLabel = 'Peminjaman Buku';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('nama_peminjam')
                ->label('Nama Peminjam')
                ->required()
                ->maxLength(100),

            TextInput::make('judul_buku')
                ->label('Judul Buku')
                ->required()
                ->maxLength(100),

            DatePicker::make('tanggal_pinjam')
                ->label('Tanggal Pinjam')
                ->required(),

            DatePicker::make('tanggal_kembali')
                ->label('Tanggal Kembali')
                ->required(),

            Select::make('status')
                ->label('Status')
                ->required()
                ->options([
                    'Belum Dikembalikan' => 'Belum Dikembalikan',
                    'Sudah Dikembalikan' => 'Sudah Dikembalikan',
                ])
                ->default('Belum Dikembalikan'),

            TextInput::make('nomor_telepon')
                ->label('Nomor Telepon')
                ->tel()
                ->required()
                ->maxLength(20),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('nama_peminjam')->label('Peminjam')->searchable(),
            TextColumn::make('judul_buku')->label('Buku')->searchable(),
            TextColumn::make('tanggal_pinjam')->label('Pinjam')->date(),
            TextColumn::make('tanggal_kembali')->label('Kembali')->date(),
            BadgeColumn::make('status')
                ->label('Status')
                ->colors([
                    'warning' => 'Belum Dikembalikan',
                    'success' => 'Sudah Dikembalikan',
                ]),
            TextColumn::make('nomor_telepon')->label('Telepon'),
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('status')
                ->label('Filter Status')
                ->options([
                    'Belum Dikembalikan' => 'Belum Dikembalikan',
                    'Sudah Dikembalikan' => 'Sudah Dikembalikan',
                ]),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPeminjaman::route('/'),
            'create' => Pages\CreatePeminjaman::route('/create'),
            'edit' => Pages\EditPeminjaman::route('/{record}/edit'),
        ];
    }
}
