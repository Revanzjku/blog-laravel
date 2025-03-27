<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Filament\Resources\MessageResource\RelationManagers;
use App\Models\Message;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('message')
                    ->limit(50)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 50 ? $state : null;
                    })
                    ->wrap(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dikirim pada')
                    ->dateTime()
                    ->timezone('Asia/Jakarta'),
                    IconColumn::make('is_read')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-clock')
                    ->label('Status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('Tandai Dibaca')
                ->action(fn ($record) => $record->update(['is_read' => true]))
                ->visible(fn ($record) => !$record->is_read)
                ->color('success'),
                Tables\Actions\ViewAction::make()
                    ->modalHeading(fn ($record) => "Detail Pesan dari {$record->name}")
                    ->modalWidth('xl')
                    ->form([
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Pengirim')
                            ->disabled(),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->disabled(),
                        Forms\Components\Textarea::make('message')
                            ->label('Isi Pesan')
                            ->disabled()
                            ->rows(10)
                            ->columnSpanFull(),
                    ]),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListMessages::route('/'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        $unreadCount = \App\Models\Message::where('is_read', false)->count();
        return $unreadCount > 0 ? (string) $unreadCount : null;
    }

}
